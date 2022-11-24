<!-- /*
<?php echo $name; ?>
{{$name}}

*/ -->



<!-- 2. Condations -->
<!-- 
<?php 
if ($name=='naresh'){
    echo "good";
}
else{
    echo "not good";    
}
 ?>

@if ($name=='najresh')
    {{'fine'}}
@else
    {{'no fine'}}
 @endif -->



 <!-- 3. forloop -->
<!-- 
 <?php 
    for($i=0; $i<10; $i++){
        echo $i;
    }
 
 ?>

 @for($i=0; $i<10; $i++)
    {{$i}}
 @endfor -->


 <!-- 4. ForEach: we use for each when we have array  -->
 
 <!-- <?php 
    foreach($data as $list){
        echo $list;
    }
 
 ?>
    
 @foreach ($data as $list)
    {{$list}}

 @endforeach -->