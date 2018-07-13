// test button
$(document).ready(function(){
       $('#enviar').click(function () {
                    $.get("ip.php",
                        {
                        'pritrinca': $('#pritrinca').val(),
                        'segtrinca': $('#segtrinca').val(),
                        'tritrinca': $('#tritrinca').val(),
                        'quatrinca': $('#quatrinca').val(),
                        'mask':     $('#mask').val()
                      },
                      function(data){
                     $(".result").html(data);
                    });

                     $(".result").css("background-color","white")
                     $(".result").css("whidth","auto")
                     $(".result").css("margin","40px")
                     $(".result").css("border-radius","20px")
                     $(".result").css("border","#771a0b 10px solid")
                     $(".result").css("color","black")
        

                    });


                    $("#test").click(function(){
                      alert("tudo em ordem com o jquery!")
                    });


});


// <input type="text" name="pritrinca" id="pritrinca" placeholder="1ª trinca">
//
// <input type="text" name="segtrinca" id="segtrinca" placeholder="2ª trinca">
//
// <input type="text" name="tritrinca" id="tritrinca" placeholder="3ª trinca">
//
// <input type="text" name="quatrinca" id="quatrinca" placeholder="4ª trinca">