<!--Custom: Menú de bimestres para octavo-->
<script>
    var bimesterLinks = jQuery( ".menu-bim-aula .pane-content .menu li a" );
    var urlSubjectWordsArray = ["matematicas", "naturales", "sociales", "lenguaje"];
    var taxonomyWordArray = ["matematicas", "ciencias-naturales", "ciencias-sociales", "lenguaje"];
    for (var link = 0; link < bimesterLinks.length; link++) {
        bimesterUrl = "/es/aulassinfronteras/grado8-subject-b";
        for (var subjectWord = 0; subjectWord < urlSubjectWordsArray.length; subjectWord++) {
            bimesterUrl = (isWordInUrl(urlSubjectWordsArray[subjectWord])) ?  getSubjectUrl(bimesterUrl, taxonomyWordArray[subjectWord], (link + 1)) : bimesterUrl;
        }
        bimesterLinks[link].href = bimesterUrl;
    }

    function isWordInUrl(word) {
        return window.location.href.includes(word);
    }

    function getSubjectUrl(url, taxonomyWord, bimesterNumber) {
        return url.replace("subject", taxonomyWord) + String(bimesterNumber);
    }
</script>
