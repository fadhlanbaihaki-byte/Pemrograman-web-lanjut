@extends('admin.layouts.admin')

@section('title', 'Edit Produk')
@section('page-title', 'Edit Produk')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 style="font-weight:700;color:#1a1a2e;margin:0;">Edit Produk</h5>
        <p style="font-size:13px;color:#8a9a94;margin:4px 0 0;">
            Mengubah: <strong>{{ $product->name }}</strong>
        </p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('produk.detail', $product->slug) }}" target="_blank"
           class="btn-admin-sm btn-view" style="padding:8px 14px;">
            <i class="bi bi-eye"></i> Lihat
        </a>
        <a href="{{ route('admin.products.index') }}"
           class="btn-admin-sm btn-view" style="padding:8px 16px;">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>
</div>

<form action="{{ route('admin.products.update', $product) }}" method="POST"
      enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row g-4">

        {{-- Left Column --}}
        <div class="col-lg-8">
            <div class="form-card">
                <h6 style="font-weight:600;color:#1a1a2e;margin-bottom:20px;padding-bottom:14px;border-bottom:1px solid #f0f4f2;">
                    <i class="bi bi-info-circle me-2" style="color:#8a9a94;"></i>
                    Informasi Utama
                </h6>

                <div class="mb-4">
                    <label class="form-label-admin">Nama Produk <span style="color:#ef4444;">*</span></label>
                    <input type="text" name="name"
                           class="form-control form-control-admin @error('name') is-invalid @enderror"
                           value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div style="font-size:11.5px;color:#b0c0ba;margin-top:5px;">
                        Slug saat ini: <code>{{ $product->slug }}</code>
                        (akan diperbarui otomatis jika nama berubah)
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label-admin">Kategori <span style="color:#ef4444;">*</span></label>
                    <select name="category_id"
                            class="form-select form-control-admin @error('category_id') is-invalid @enderror"
                            required>
                        <option value="">— Pilih Kategori —</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}"
                                {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label-admin">Deskripsi</label>
                    <textarea name="description" rows="5"
                              class="form-control form-control-admin @error('description') is-invalid @enderror"
                              placeholder="Deskripsi singkat produk...">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-0">
                    <label class="form-label-admin">Spesifikasi</label>
                    <textarea name="specification" rows="5"
                              class="form-control form-control-admin @error('specification') is-invalid @enderror"
                              placeholder="Detail spesifikasi teknis produk...">{{ old('specification', $product->specification) }}</textarea>
                    @error('specification')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- Right Column --}}
        <div class="col-lg-4">

            {{-- Image --}}
            <div class="form-card mb-4">
                <h6 style="font-weight:600;color:#1a1a2e;margin-bottom:20px;padding-bottom:14px;border-bottom:1px solid #f0f4f2;">
                    <i class="bi bi-image me-2" style="color:#8a9a94;"></i>
                    Foto Produk
                </h6>

                {{-- Current Image --}}
                @if($product->image)
                <div style="margin-bottom:14px;position:relative;">
                    <img id="imagePreview"
                         src="{{ asset('storage/' . $product->image) }}"
                         alt="{{ $product->name }}"
                         style="width:100%;max-height:200px;object-fit:cover;border-radius:10px;border:2px solid #e8edeb;">
                    <div style="font-size:11.5px;color:#8a9a94;margin-top:6px;text-align:center;">
                        Gambar saat ini
                    </div>
                </div>
                @else
                <div id="imagePreviewArea" style="display:none;margin-bottom:14px;">
                    <img id="imagePreview" src="#" alt="Preview"
                         style="width:100%;max-height:200px;object-fit:cover;border-radius:10px;border:2px solid #e8edeb;">
                </div>
                @endif

                <div id="imageDropzone"
                     style="border:2px dashed #e0e8e4;border-radius:10px;padding:20px 16px;text-align:center;cursor:pointer;transition:all 0.2s;"
                     onclick="document.getElementById('imageInput').click()">
                    <i class="bi bi-arrow-repeat" style="font-size:22px;color:#b0c0ba;display:block;margin-bottom:6px;"></i>
                    <div style="font-size:13px;color:#8a9a94;font-weight:500;">
                        {{ $product->image ? 'Ganti Gambar' : 'Upload Gambar' }}
                    </div>
                    <div style="font-size:11.5px;color:#b0c0ba;margin-top:3px;">JPG, PNG, WEBP — Maks 2MB</div>
                </div>

                <input type="file" id="imageInput" name="image" accept="image/*"
                       style="display:none;"
                       onchange="previewNewImage(this)">

                @error('image')
                    <div style="color:#ef4444;font-size:12.5px;margin-top:6px;">{{ $message }}</div>
                @enderror
            </div>

            {{-- Options --}}
            <div class="form-card">
                <h6 style="font-weight:600;color:#1a1a2e;margin-bottom:20px;padding-bottom:14px;border-bottom:1px solid #f0f4f2;">
                    <i class="bi bi-toggles me-2" style="color:#8a9a94;"></i>
                    Opsi Produk
                </h6>

                <div class="d-flex align-items-center justify-content-between p-3"
                     style="background:#f8faf9;border-radius:10px;">
                    <div>
                        <div style="font-size:13.5px;font-weight:500;color:#1a1a2e;">Produk Unggulan</div>
                        <div style="font-size:12px;color:#8a9a94;">Tampilkan di halaman utama</div>
                    </div>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox"
                               name="is_featured" id="is_featured"
                               value="1"
                               {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}
                               style="width:42px;height:22px;cursor:pointer;">
                    </div>
                </div>
            </div>

            {{-- Danger Zone --}}
            <div class="form-card mt-4" style="border-color:#fee2e2;">
                <h6 style="font-weight:600;color:#dc2626;margin-bottom:14px;">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    Zona Berbahaya
                </h6>
                <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini? Tindakan ini tidak bisa dibatalkan.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            style="width:100%;background:#fee2e2;border:1px solid #fecaca;color:#dc2626;padding:9px;border-radius:8px;font-size:13px;font-weight:500;cursor:pointer;transition:all 0.2s;display:flex;align-items:center;justify-content:center;gap:6px;">
                        <i class="bi bi-trash"></i>
                        Hapus Produk Ini
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Actions --}}
    <div class="d-flex justify-content-end gap-2 mt-4">
        <a href="{{ route('admin.products.index') }}"
           class="btn-admin-sm btn-view" style="padding:10px 20px;font-size:13px;">
            Batal
        </a>
        <button type="submit" class="btn-admin-primary" style="font-size:13px;padding:10px 24px;">
            <i class="bi bi-check-lg"></i>
            Perbarui Produk
        </button>
    </div>
</form>

@endsection

@push('scripts')
<script>
    function previewNewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.getElementById('imagePreview');
                if (img) {
                    img.src = e.target.result;
                } else {
                    document.getElementById('imagePreviewArea').style.display = 'block';
                    document.getElementById('imagePreview').src = e.target.result;
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
