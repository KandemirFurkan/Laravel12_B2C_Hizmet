<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hizmetler;

class HizmetlerSeeder extends Seeder
{
    public function run()
    {
        $hizmetler = [
            [
                'title'   => 'Nakliye',
                'content' => 'Eşya taşıma ve nakliye hizmetleri.',
                'image'   => 'https://images.unsplash.com/photo-1573497019415-1a68d9fbe2c8?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Depolama',
                'content' => 'Kısa ve uzun dönem eşya depolama çözümleri.',
                'image'   => 'https://images.unsplash.com/photo-1581091215363-08c3e92e9f14?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Evden Eve Taşımacılık',
                'content' => 'Ev eşyalarının profesyonel taşınması ve montajı.',
                'image'   => 'https://images.unsplash.com/photo-1592849964935-d5e6f34700db?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Ofis Taşımacılığı',
                'content' => 'Ofis ekipmanları ve mobilyalarının taşınması.',
                'image'   => 'https://images.unsplash.com/photo-1598327102586-4e8c4f19f1e2?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Ambalajlama Hizmeti',
                'content' => 'Eşya ambalajlama ve paketleme hizmetleri.',
                'image'   => 'https://images.unsplash.com/photo-1598387842420-0c47a2c5e051?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Asansörlü Taşıma',
                'content' => 'Yüksek katlarda asansörlü taşıma imkânı.',
                'image'   => 'https://images.unsplash.com/photo-1600180758896-c1d80a9c3e22?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Sigortalı Taşıma',
                'content' => 'Eşyalarınızı sigorta kapsamında taşıyoruz.',
                'image'   => 'https://images.unsplash.com/photo-1616485208004-1f9cdb75e65e?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Paketleme Malzemeleri',
                'content' => 'Kutu, balonlu naylon ve koruyucu malzeme temini.',
                'image'   => 'https://images.unsplash.com/photo-1581090700227-1e37b190418e?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Montaj & Demontaj',
                'content' => 'Mobilya montajı ve demontaj hizmetleri.',
                'image'   => 'https://images.unsplash.com/photo-1600180758708-3e29e07d4f2b?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Parça Eşya Taşıma',
                'content' => 'Az eşyalı taşınma için uygun çözümler.',
                'image'   => 'https://images.unsplash.com/photo-1600180758705-7c4b9a3b00cd?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Askeri Taşımacılık',
                'content' => 'Askeri birliklere yönelik taşımacılık hizmetleri.',
                'image'   => 'https://images.unsplash.com/photo-1600180758745-8fc3b9b7c5e4?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Hastane Taşımacılığı',
                'content' => 'Sağlık kurumlarına özel taşımacılık çözümleri.',
                'image'   => 'https://images.unsplash.com/photo-1600180758750-3f3e5e0d3e28?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Depo Taşımacılığı',
                'content' => 'Depo alanları arası veya içi taşımacılık.',
                'image'   => 'https://images.unsplash.com/photo-1600180758756-1e7b3e0d5f2a?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Yurtiçi Taşıma',
                'content' => 'Türkiye içi şehirler arası taşımacılık.',
                'image'   => 'https://images.unsplash.com/photo-1600180758760-0c3f5e1a5d3b?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Yurtdışı Taşıma',
                'content' => 'Uluslararası taşımacılık ve lojistik destek.',
                'image'   => 'https://images.unsplash.com/photo-1600180758764-2d4b4c2e6f3e?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Karton Kolileme',
                'content' => 'Eşyaların karton koliye yerleştirilmesi ve etiketlenmesi.',
                'image'   => 'https://images.unsplash.com/photo-1600180758770-3c2b3d2e5e2a?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Depolama ve Arşivleme',
                'content' => 'Firma arşivleri ve evraklar için depolama hizmeti.',
                'image'   => 'https://images.unsplash.com/photo-1600180758775-4d2b2e3e6f1c?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Uzman Ekip',
                'content' => 'Profesyonel eğitimli ekip ile taşımacılık hizmeti.',
                'image'   => 'https://images.unsplash.com/photo-1600180758780-5d2c3e4f7e2a?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Temizlik Hizmeti',
                'content' => 'Taşınma öncesi ve sonrası temizlik desteği.',
                'image'   => 'https://images.unsplash.com/photo-1600180758785-6e3d4f5a8f3b?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
            [
                'title'   => 'Asansör Kiralama',
                'content' => 'Asansörlü vinç ve makina kiralama hizmetleri.',
                'image'   => 'https://images.unsplash.com/photo-1600180758790-7f4e5g6h9i0j?w=200&h=200&fit=crop',
                'status'  => 1,
            ],
        ];

        foreach ($hizmetler as $hizmet) {
            Hizmetler::create($hizmet);
        }
    }
}
