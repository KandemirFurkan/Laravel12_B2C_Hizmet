<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => 'Bahçe Düzenleme Fikirleri',
            'content' => 'Bahçenizi güzelleştirmek için yaratıcı fikirler. Küçük alanlarda bile yeşil dokunuşlar fark yaratır. Dikey bahçeler, geri dönüştürülmüş paletlerden saksılar veya taş yürüyüş yolları bahçenizi daha estetik hale getirebilir. Oturma alanlarını gölgeliklerle ayırarak yaz günlerinde konfor sağlayabilirsiniz. Ayrıca, gece aydınlatması için solar lambalar hem ekonomik hem çevre dostudur.',
            'image' => 'https://images.unsplash.com/photo-1523292562811-8fa7962a78c8?w=400&h=400&fit=crop',
            'status' => 1,
        ]);

        Blog::create([
            'title' => 'Ev Dekorasyonunda Minimalizm',
            'content' => 'Minimalizm, sade ama anlamlı bir yaşam tarzıdır. Evde gereksiz eşyalardan kurtulmak sadece alanı değil, zihni de boşaltır. Açık renk paletleri, düz hatlı mobilyalar ve doğal malzemeler minimalist tasarımın temelini oluşturur. Her parça işlevsel olmalı; az ama kaliteli ürünler tercih edilmelidir.',
            'image' => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511?w=400&h=400&fit=crop',
            'status' => 1,
        ]);

        Blog::create([
            'title' => 'Profesyonel Temizlik İpuçları',
            'content' => 'Ev temizliği, düzenli yapıldığında hem zaman kazandırır hem de sağlığı korur. Mikrofiber bezler, doğal temizlik ürünleri ve planlı temizlik takvimi ile evinizi kolayca düzenli tutabilirsiniz. Özellikle mutfak ve banyo gibi nemli alanlarda hijyen öncelikli olmalıdır. Sirke, karbonat ve limon gibi doğal malzemeler etkili temizlik sağlar.',
            'image' => 'https://images.unsplash.com/photo-1581579185169-3afddbe2e89c?w=400&h=400&fit=crop',
            'status' => 1,
        ]);

        Blog::create([
            'title' => 'Evcil Hayvan Bakımında Dikkat Edilmesi Gerekenler',
            'content' => 'Evcil hayvanlar sadece dost değil, aile bireyleridir. Düzenli veteriner kontrolleri, dengeli beslenme ve günlük egzersizler onların sağlığı için şarttır. Ayrıca evdeki eşyaların güvenli hale getirilmesi, tüy dökümüne karşı temizlik rutinlerinin artırılması önemlidir. Evcil dostunuzun yaşam alanını temiz ve ferah tutmak mutluluğunu artırır.',
            'image' => 'https://images.unsplash.com/photo-1558944351-c5d9d4f3c9b7?w=400&h=400&fit=crop',
            'status' => 1,
        ]);

        Blog::create([
            'title' => 'Kışa Hazırlık Rehberi',
            'content' => 'Kış ayları yaklaşırken evinizi ve yaşam alanınızı hazırlamak gerekir. Isı yalıtımı kontrol edilmeli, pencerelerden sızan hava engellenmelidir. Kombi bakımı yaptırmak, tasarruflu ısınmayı sağlar. Ayrıca bitkilerin soğuğa dayanıklı hale gelmesi için toprağa organik gübre eklemek yararlıdır. Küçük önlemlerle konforlu bir kış geçirilebilir.',
            'image' => 'https://images.unsplash.com/photo-1608889173121-4a1a5c7b8c9b?w=400&h=400&fit=crop',
            'status' => 1,
        ]);

        Blog::create([
            'title' => 'Boya ve Renk Seçiminde Uzman Tavsiyeleri',
            'content' => 'Renk seçimi bir mekânın ruhunu belirler. Açık tonlar alanı geniş gösterirken, koyu renkler derinlik katar. Odanın aldığı doğal ışık, duvar rengi seçimini doğrudan etkiler. Ayrıca mobilya renkleriyle kontrast oluşturmak, dekorasyona dinamizm kazandırır. Mat boyalar küçük kusurları gizler, parlak boyalar ise temizlik kolaylığı sağlar.',
            'image' => 'https://images.unsplash.com/photo-1596075780750-81249df16d19?w=400&h=400&fit=crop',
            'status' => 1,
        ]);

        Blog::create([
            'title' => 'Akıllı Ev Teknolojileri ile Konforu Artırın',
            'content' => 'Günümüzde akıllı ev sistemleri yaşam kalitesini yükseltiyor. Akıllı prizler, sensörlü aydınlatmalar ve sesle kontrol edilebilen cihazlar enerji verimliliği sağlar. Güvenlik kameraları ve uzaktan erişim sistemleri evinizi her yerden izlemenize olanak tanır. Teknoloji, günlük hayatı daha pratik hale getirmenin en etkili yollarından biridir.',
            'image' => 'https://images.unsplash.com/photo-1617098961080-f47b6cc5c9cf?w=400&h=400&fit=crop',
            'status' => 1,
        ]);

        Blog::create([
            'title' => 'Yaz Bahçesi Bitkileri',
            'content' => 'Yaz aylarında bahçenizi renklendirmek için begonya, sardunya ve lavanta gibi sıcak hava dostu bitkiler ideal seçimdir. Güneş ışığını seven bu bitkiler, az bakım ister. Sulama zamanlarını sabah erken saatlere almak bitkinin sağlığı için önemlidir. Ayrıca toprak havalandırmasını ihmal etmeyin, kök gelişimi için faydalıdır.',
            'image' => 'https://images.unsplash.com/photo-1597733336794-12d05021d510?w=400&h=400&fit=crop',
            'status' => 1,
        ]);

        Blog::create([
            'title' => 'Ev Tadilatında Dikkat Edilmesi Gerekenler',
            'content' => 'Ev tadilatı, doğru planlama yapılmadığında zaman ve maliyet açısından sorun yaratabilir. Öncelikle yapılacak değişikliklerin sırasını belirlemek gerekir: elektrik, tesisat, boya, mobilya gibi adımlar planlı ilerlemelidir. Usta seçiminde referansları kontrol etmek, kaliteli malzeme kullanmak uzun ömürlü sonuç sağlar.',
            'image' => 'https://images.unsplash.com/photo-1581090700227-1e37b190418e?w=400&h=400&fit=crop',
            'status' => 1,
        ]);
    }
}
