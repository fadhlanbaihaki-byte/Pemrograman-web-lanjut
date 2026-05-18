<h1>Kontak Indo Gummi</h1>

<p>Alamat: {{ $settings['company_address'] ?? '-' }}</p>

<p>WhatsApp: {{ $settings['whatsapp_number'] ?? '-' }}</p>

<p>Email: {{ $settings['company_email'] ?? '-' }}</p>

<a href="{{ $whatsappLink }}" target="_blank">
    Hubungi WhatsApp
</a>