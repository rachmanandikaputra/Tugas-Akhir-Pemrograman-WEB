function cari() {
var kata = document.google.key.value; //menagkap kata yang kita inputkan dari form google
var hasil= "http://www.google.com/search?q=" + kata ;
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes') 
} 
