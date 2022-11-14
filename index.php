<html>
    <head>
        <title>PHP</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <!--<marquee direction="up" class="number" scrollamount=10000> -->
        <?php 
            function prime($n){
                if($n<2){
                    return false;
                }elseif($n==2){
                    return true;
                }elseif($n%2==0){
                    return false;
                }                
                else{
                    $max=floor(sqrt($n))+1;
                    for($i=3; $i<=$max; $i+=2){
                        if($n%$i==0) return false;
                    }
                }
                return true;
                
            }
            function root($n,$p){
                if(pow(floor(pow($n,1/$p)),$p)==$n){
                    return true;
                }else{
                    return false;
                }
            }
            function perfectroot($i){
                $max=0;
                for($k=0; $k<$i; $k++){
                    if(pow(2,$k)>$i){
                        $max=$k;
                        break;
                    } 
                }
                for($p=2; $p<$max; $p++){
                    if(root($i,$p)){
                        return true;
                        break;
                    }
                }
                return false;
            }
            function palindrome($n){
                $back=$n;
                $rev=0;
                while(floor($n)){
                    $rem=$n%10;
                    $rev=$rev*10+$rem;
                    $n=$n/10;
                }
                if($back==$rev){
                    return true;
                }else{
                    return false;
                }
            }
            function armstrong($n){
                $p=strlen((string)($n));
                $back=$n;
                $arm=0;
                while(floor($n)){
                    $rem=$n%10;
                    $arm+=pow($rem,$p);
                    $n=$n/10;
                }
                if($back==$arm){
                    return true;
                }else{
                    return false;
                }
            }
            for($i=1; $i<=100000;$i++){
                $class="white";
                if($i==1){
                $class="red";
            }
            elseif(prime($i)){
                $class="green";
            }
            elseif(perfectroot($i)){
                $class="blue";
            }elseif(palindrome($i)){
                $class="purple";
            }elseif(armstrong($i)){
                $class="indigo";
            }
            echo("<span class=$class>$i </span>");
        }
        ?>
        <!-- </marquee> -->
    </body>
</html>