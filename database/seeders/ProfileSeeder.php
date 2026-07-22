<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'school_name' => 'SMKN 11 Kabupaten Tangerang',
            'welcome_message' => 'Selamat datang di SMKN 11 Kabupaten Tangerang, sekolah menengah kejuruan negeri yang berkomitmen untuk memberikan pendidikan berkualitas dan mempersiapkan siswa menghadapi masa depan.',
            'description' => 'SMKN 11 Kabupaten Tangerang merupakan sekolah menengah kejuruan negeri yang terletak di Pangkat, Kec. Jayanti, Kabupaten Tangerang, Banten. Sekolah ini menyediakan berbagai program keahlian yang relevan dengan kebutuhan industri dan dunia kerja.',
            'principal_name' => 'Emma Sukmayati',
            'principal_message' => 'Di SMKN 11, kami bertujuan untuk memberdayakan siswa dengan keterampilan, pengetahuan, dan nilai-nilai yang dibutuhkan untuk sukses dalam konteks global. Kami berkomitmen untuk menciptakan lingkungan belajar yang kondusif dan inovatif.',
            'principal_photo' => null,
            'vision' => 'Menjadi sekolah menengah kejuruan unggul yang menghasilkan lulusan berkualitas, kompeten, dan berdaya saing tinggi.',
            'mission' => '1. Menyelenggarakan pendidikan kejuruan yang berkualitas\n2. Mengembangkan potensi siswa secara optimal\n3. Menjalin kerjasama dengan dunia industri\n4. Menerapkan teknologi dalam proses pembelajaran',
            'address' => 'Pangkat, Kec. Jayanti, Kabupaten Tangerang, Banten 15610',
            'phone' => '08123456789',
            'email' => 'info@smkn11.sch.id',
        ]);
    }
}
