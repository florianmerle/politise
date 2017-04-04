<footer>
		<div id="footer">
			<ul>
				<a href=""><li>À Propos - </li></a>
				<a href=""><li>Contact -</li></a>
				<a href=""></a><li>Mentions Légales</li></a>
			</ul>
		</div>
	</footer>
    
    <!---Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		
            $('#mobiedito').click(function(){
    			$('.navbar-mobile .select').removeClass('select');
    			$(this).addClass('select');
    			$('#sidebar').show();
    			$('#main').hide();
    		})

    		$('#mobiune').click(function(){
    			$('.navbar-mobile .select').removeClass('select');
    			$(this).addClass('select');
    			$('#sidebar').hide();
                $('#main').show();
    		})
    	})
    </script>
  </body>
</html>