@component('mail::message')
# Haloo

Thks sudah menggunakan jasa kami! ada promo dan produk kami yang membawa manfaat

@component('mail::button', ['url' => 'www.ezypolis.com'])
Ambil manfaat sekarang!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
