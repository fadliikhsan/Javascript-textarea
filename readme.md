Javascript Textarea
==================

<font align="justify">Sedikit berbagi ma temen - temen sekalian tentang javascript, ya walaupun kita masih sama - sama belajar :D</font>
<br /> [Blog Saya](http://www.dunia14inch.wordpress.com)

![](http://dunia14inch.files.wordpress.com/2013/10/1.png)
<table>
    <tr>
        <td width="980px" align="center"><b>Home View</b></td>
    </tr>
</table>


Sample My Javascript
====================

<pre>
    <code>
        <script>
		$(document).ready(function () {
			var max = 100;
			$('#tanyajawab').keypress(function (event){		
				var len = $(this).val().length;
				if (event.which < 0x20) {
				  // e.which < 0x20, then it's not a printable character
				  // e.which === 0 - Not a character
				  return; // Do nothing
				}

				if (len >= max) {
				  event.preventDefault();
				}
			});
			
			if($('textarea[name=tanyajawab]').val().trim()==''){
			   $("#btnkirim").attr("disabled", true);  
			}

			$('textarea[name=tanyajawab]').keyup(function(){
				
				val = $(this).val().trim();    
				if(val.length > 0 && val.length < max){
					$("#btnkirim").attr("disabled", false);
				}else{
					$("#btnkirim").attr("disabled", true);
				}
			});
			
		  $('#tanyajawab').keyup(function (event) {
			var len = $(this).val().length;
			var char = max - len;
			$('#sisatext').text('sisa '+char + ' karakter');
		  });

		});
		</script>
    </code>
</pre>


