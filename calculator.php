<style>
    .main-container{
        text-align: center;
    
        margin-top:10em;
    }
    .text-field{
        padding: .7em;
        margin: .5em;
        font-size: 1.5rem;
    }
    label {
        font-size:1.5rem;
    }
    .operations{
        padding: .7em 1.5em;
        font-size: 1rem;
    }
</style>
<?php
 
if(isset($_POST['operation']))
{
    $firstValue =$_POST['firstValue'];
    $secondValue =$_POST['secondValue'];
    $operations = $_POST['operation'];
    $result=0;
    switch($operations)
    {
        case '+':
            $result = $firstValue+$secondValue;
            break;

        case '-':
            $result = $firstValue-$secondValue;
            break;
        case '*':
            $result = $firstValue*$secondValue;
            break;

        case '/':
            $result = $firstValue/$secondValue;
            break;

            
       
       
    }
 
    
}






?>

<div class="main-container">

<h2>a very simple calculator developed in php</h2>
<form action="" method="POST">
    <label for="firstValue">
        Enter First Value
        <input class="text-field" type="number" name="firstValue" required >
     </label><br>
    <label for="secondValue">
        Enter Second Value 
        <input class="text-field" type="number" name="secondValue" required> 
    </label><br>
    <input class = "operations" type="submit" name="operation" value="-">
    <input class = "operations" type="submit" name="operation" value="+">
    <input class = "operations" type="submit" name="operation" value="*">
    <input class = "operations" type="submit" name="operation" value="/"><br>
    <label for="result"> 
    Result
    <input class="text-field" value="<?php if(isset($_POST['operation'])) echo $result;  else echo 0; ?>" type="text" name="result" > 

</form>



</label><br>


</div>

