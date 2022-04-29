$(document).ready(function(){
    var description = {
        'Akademik' : 'Aspirasi Akademik adalah Aspirasi yang melingkupi semua kegiatan yang berhubungan dengan kegiatan belajar mengajar.',
        'Non-Akademik' : 'Aspirasi Non-Akademik adalah Aspirasi yang melingkupi kegiatan non-akademik seperti lomba, KKN, PMK.',
        'Fasilitas' : 'Aspirasi Fasilitas adalah segala aspirasi yang berhubungan dengan kondisi dan fasilitas dan peralatan yang disediakan/berada dalam lingkungan Universitas Multimedia Nusantara.',
        'Kegiatan' : 'Aspirasi kegiatan adalah hal lainnya yang berhubungan dengan kegiatan-kegiatan kemahasiswaan di UMN.'
    };

    $("#CategorySelect").change(function(){
        var key = $(this).val(); 
        $("#description").text(description[key]);
    });
});