$(document).ready(function(){
    var description = {
        'Akademik' : 'Academic Aspirations are aspirations that cover all activities related to teaching and learning activities.',
        'Non-Akademik' : 'Non-Academic Aspirations are aspirations that cover non-academic activities such as competitions, KKN, PMK.',
        'Fasilitas' : 'Facility Aspirations are all aspirations related to the conditions and facilities and equipment provided/located within Multimedia Nusantara University.',
        'Kegiatan' : 'Activity aspirations are other matters related to student activities at UMN.'
    };

    $("#CategorySelect").change(function(){
        var key = $(this).val(); 
        $("#description").text(description[key]);
    });
});