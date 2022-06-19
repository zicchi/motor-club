<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => 'motorclub@gmail.com',
            'phone' => '082199401002',
            'address' => 'Jl Ketawanggede no 1, Lowokwaru, Malang, Jawa Timur',
            'about' => 'Tahun 2017 merupakan awalan yang baik terhadap sejarah berdirinya Harley Davidson Motor Club. Disambut pergerakan grafik pariwisata dan ekonomi yang meningkat, mampu menumbuhkan optimisme terhadap perkembangan Harley Davidson Motor Club. Berawal dari ketertarikan dengan motor Harley menjadikan gagasan yang perlu diwujudkan guna mewadahi rasa dan karsa dari pecinta otomotif, khususnya motor Harley). Harley Davidson Motor Club ini, didirikan oleh Yanto Basri bersama dengan rekan-rekan pecinta otomotif. Maka dibentuklah Harley Davidson Motor Club ini pada 17-2-2015 dan telah berkembang di beberapa daerah seperti Surabaya, Jakarta, DIY, dan beberapa kota besar lainnya.',
            'profile' => 'Harley Davidson Motor CLub ini, didirikan oleh Yanto Basri yang bergerak di bidang otomotif. Melalui organisasi inilah kami mampu menciptakan pengalaman berkendara yang santai, aman, dan menyenangkan bagi riders/bikers. Kami telah berhasil melestarikan budaya ditiap-tiap daerah khususnya cabang Harley Davidson Motor CLub agar selaras dengan perkembangan dunia yang dinamis. Mempromosikan sektor pariwisata yang dibungkus konsep berkelas, sehingga mampu membangkitkan pariwisata khususnya di Indonesia. Ikatan organisasi yang terus terjalin dengan Harley Davidson Motor CLub mampu merapatkan baris terdepan dalam bersosial khususnya sesama club dan masyarakat. Inovasi tinggi terhadap kecintaan kami pada bidang otomotif, diharapkan mampu berperan aktif dalam perkembangan otomotif dunia, khususnya di Indonesia.',
        ];
    }
}
