 <script type="text/javascript">
	$(document).ready(function(){
        function getData(){
           
            $.ajax({
                type: 'GET',
                data:{name : 'lalit'},
                url: '<?php echo base_url('wimax/flash'); ?>',
                success: function(data){
                    console.log(data);
                }
                
            });

        }

        setInterval(function () {
            getData(); 
        }, 20000);

    });
    
</script>