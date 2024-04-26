window.addEventListener("DOMContentLoaded", function() {
var admin = document.getElementById("admin");
var count=1;
admin.addEventListener("click", function() {
console.log(count);
if(count==3)
{
    
    admin.setAttribute("href","/Login");
}
count++;
});
});