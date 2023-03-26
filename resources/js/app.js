import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs'

window.Alpine = Alpine
//

Alpine.start()

document.onload = function(){
$(".favorite").on("click", function (event){
    bookid = $(this).data("bookid");
    $.ajax({
        method: 'POST',
        url: urlFav,
        data: {bookid: bookid , _token:token},
        success: function(data){

            if(data.is_fav == 1){
                $(event.target).innerHTML = "Remove from favorites";

            }
            if(data.is_fav == 0){
                $(event.target).removeClass("text-danger").addClass("text-dark");
            }
        }

    })})}
