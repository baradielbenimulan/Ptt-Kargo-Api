<?php 


$url = 'https://pttws.ptt.gov.tr/PttVeriYukleme/services/Sorgu?wsdl=kabulEkle2';

$post = '<?xml version="1.0"?>
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:kab="http://kabul.ptt.gov.tr" xmlns:xsd="http://kabul.ptt.gov.tr/xsd">
   <soap:Header/>
   <soap:Body>
      <kab:kabulEkle2>

         <kab:input>
         
            <xsd:dongu>

               <xsd:aAdres>Alıcı Adres (Zorunlu)</xsd:aAdres>

               <xsd:agirlik>Kargo Ağırlık (Zorunlu)</xsd:agirlik>

               <xsd:aliciAdi>Alıcı Adı (Zorunlu)</xsd:aliciAdi>

               <xsd:aliciIlAdi>Alıcı Şehir (Zorunlu)</xsd:aliciIlAdi>

               <xsd:aliciIlceAdi>Alıcı İlçe (Zorunlu)</xsd:aliciIlceAdi>

               <xsd:aliciSms>Alıcı Telefon (Zorunlu)</xsd:aliciSms>

               <xsd:aliciTel>Alıcı Telefon (Opsiyon)</xsd:aliciTel>

               <xsd:barkodNo>Kargo Barkod No (Zorunlu)</xsd:barkodNo>

               <xsd:boy>Kargo Boy (Zorunlu)</xsd:boy>

               <xsd:deger_ucreti>Kargo Ücreti (Opsiyon - Ptt Günceller)</xsd:deger_ucreti>

               <xsd:desi>Kargo Desi (Zorunlu)</xsd:desi>

               <xsd:ekhizmet>Kargo Ek Hizmet (Opsiyon Bedelsiz-Alıcı Ödeme vs...)</xsd:ekhizmet>

               <xsd:en>Kargo En (Zorunlu)</xsd:en>

               <xsd:gondericibilgi>

                  <xsd:gonderici_adi>Gonderici Adi (Zorunlu)</xsd:gonderici_adi>

                  <xsd:gonderici_adresi>Gönderici Adresi (Zorunlu)</xsd:gonderici_adresi>

                  <xsd:gonderici_email>Gönderici Mail (Zorunlu)</xsd:gonderici_email>

                  <xsd:gonderici_il_ad>Gönderici Şehir (Zorunlu)</xsd:gonderici_il_ad>

                  <xsd:gonderici_ilce_ad>Gönderici ilçe (Zorunlu)</xsd:gonderici_ilce_ad>

                  <xsd:gonderici_posta_kodu>Gönderici Şehir Kodu (Zorunlu)</xsd:gonderici_posta_kodu>

                  <xsd:gonderici_sms>Gönderici Telefon (Zorunlu)</xsd:gonderici_sms>

                  <xsd:gonderici_telefonu>Gönderici Telefon (Opsiyon)</xsd:gonderici_telefonu>

                  <xsd:gonderici_ulke_id>Gönderici Ülke (Opsiyon)</xsd:gonderici_ulke_id>

               </xsd:gondericibilgi>

               <xsd:iadeAAdres>Gönderici İade Adresi (Opsiyon)</xsd:iadeAAdres>

               <xsd:iadeAIlKodu>Gönderici Şehir Kodu (Opsiyon)</xsd:iadeAIlKodu>

               <xsd:iadeAIlceKodu>Gönderici İlçe Kodu (Opsiyon)</xsd:iadeAIlceKodu>

               <xsd:iadeAliciAdi>Gönderici İade Adı (Opsiyon)</xsd:iadeAliciAdi>

               <xsd:iadeAliciEmail>Gönderici İade Email (Opsiyon)</xsd:iadeAliciEmail>

               <xsd:iadeAliciIlAdi>Gönderici İade Şehir (Opsiyon)</xsd:iadeAliciIlAdi>

               <xsd:iadeAliciIlceAdi>Gönderici İade İlçe (Opsiyon)</xsd:iadeAliciIlceAdi>

               <xsd:iadeAliciTel>Gönderici İade Tel (Opsiyon)</xsd:iadeAliciTel>

               <xsd:musteriReferansNo>Gönderici İade Adresi (Opsiyon)</xsd:musteriReferansNo>

               <xsd:odemesekli>Kargo Ödeme Şekli (Zorunlu)</xsd:odemesekli>

               <xsd:parcali_barkod_referans_no>Kargo Barkod Referans No (Opsiyon)</xsd:parcali_barkod_referans_no>

               <xsd:rezerve1>Gönderici Ptt Hesap No (Karşı Ödeme İse Zorunlu)</xsd:rezerve1>

               <xsd:rezerve2>Gönderici Ptt Hesap No (Opsiyon)</xsd:rezerve2>

               <xsd:rezerve3>Gönderici Ptt Hesap No (Opsiyon)</xsd:rezerve3>

               <xsd:rezerve4>Gönderici Ptt Hesap No (Opsiyon)</xsd:rezerve4>

               <xsd:rezerve5>Gönderici Ptt Hesap No (Opsiyon)</xsd:rezerve5>

               <xsd:teslim_tip>Gönderici Teslim Tipi (Zorunlu)</xsd:teslim_tip>

               <xsd:ucret>Gönderici Ücret (Opsiyon)</xsd:ucret>

               <xsd:yukseklik>Kutu Yüksekliği (Zorunlu)</xsd:yukseklik>
            </xsd:dongu>

            <xsd:dosyaAdi>Kargo Dosya No (Zorunlu)</xsd:dosyaAdi>

            <xsd:gonderiTip>NORMAL (Zorunlu)</xsd:gonderiTip>

            <xsd:gonderiTur>KARGO (Zorunlu)</xsd:gonderiTur>

			<xsd:kullanici>PttWs (Zorunlu)</xsd:kullanici>
            <xsd:musteriId>Gönderici ID (Zorunlu)</xsd:musteriId>
            <xsd:sifre>Gönderici Şifre (Zorunlu)</xsd:sifre>
         </kab:input>
      </kab:kabulEkle2>
   </soap:Body>
</soap:Envelope>';

$headers = array(
    "POST PttVeriYukleme/services/Sorgu HTTP/1.1",
    "Host: pttws.ptt.gov.tr",
    "Content-Type: application/soap+xml; charset=utf-8",
    "Content-Length: ".strlen($post)
    ); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$xml = curl_exec($ch);
curl_close($ch);


echo $xml;

echo "<br />";







?>
