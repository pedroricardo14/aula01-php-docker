<?php

//declare(strict_types=1);

//phpinfo();


// O uso de duas barras e/ou de barra asterisco serve para comentar o código.



//echo 'oi';
/*
$contador = 1;
$mensagem = "Olá";
$versao = array('1.1','2','3.4');
//print_r($versao);

$primeiro_nome = "Maria";
echo $primeiro_nome;
//echo '<br />';
$ultimo_nome = "Lourdes";
//echo $ultimo_nome;

*/

/*
$time = array('Maria', 'José', 'Ana');

echo $time[2];

echo '<br />';

print_r($time);

*/

// Tanto o echo como o print_r serve para mostrar o valor das variáveis

/*

echo 'a: [' . TRUE. ']<br />';
echo 'a: [' . FALSE . ']<br />';

echo 'a: [' . (20 > 9) . ']<br />';
echo 'b: [' . (5 == 6) . ']<br />';
echo 'c: [' . (1 == 0) . ']<br />';
echo 'd: [' . (1 === '1') . ']<br />';

// Para checar se o valor é igual usa o ==, se quisr comparar tudo, até o tipo, usa ===
// O . antes e depois da variável é para concatenar com alguma coisa


$idade = 30;

echo 'e: [' . "$idade" . ']<br />';


// quando usa aspas simples o php já passa a variável direto, mas se usar aspas duplas, ai o PHP passa duas vezes sendo que a segunda é uma verificação da variável

*/
/*
$saldo = 10;
if ($saldo < 100) {
    $deposito = 1000;
    $saldo += $deposito;
}
echo $saldo;

*/

//comentário de commit(teste)




/*
$menu = 'sobre';
switch ($menu) {
    case 'index':
        echo 'Escolheu a página Inicial.';
        break;
    case 'sobre':
        echo 'Escolheu a página Sobre.';
        break;
    case 'novidades':
        echo 'Escolheu a página Novidades.';
        break;
    case 'links':
        echo 'Escolheu a página Links.';
        break;
    default:
        echo 'Página não encontrada.';
        break;
}


*/

/*

$tanque = 1;

echo $tanque <= 1 ? 'Abastecer agora <br />' : 'COMBUSTÍVEL OK <br />';

$statusTanque = $tanque <= 1 ? FALSE : TRUE;

if($statusTanque) echo 'Combustível OK';
else echo 'Procurar um posto para abastecer.';



*/

/*

$cout = 1;
while ($cout<=10){
    echo $cout . ' x 10 = ' . $cout*10 . '<br />';
    ++$cout;
}
$cout = 1;
echo '<br />'



*/

/*

$vegetais = array('jerimum', 'batata', 'tomate');

//$vegetais[20] = 'alface';

$total = count($vegetais);

for($i=0;$i<$total;$i++){
    echo 'Hoje eu vou cozinhar ' . $vegetais[$i] . '<br />';
}


//print_r($vegetais);
//var_dump($vegetais);

echo 'Hoje eu vou cozinhar ' . $vegetais[0] . '<br />';
echo 'Hoje eu vou cozinhar ' . $vegetais[1] . '<br />';
echo 'Hoje eu vou cozinhar ' . $vegetais[2] . '<br />';

echo 'Vegetais disponíveis: ' . count($vegetais);






*/






$vegetais = array(
    'jerimin'=>'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgVFRYYGRgaHBgaHBwYGBgYGhwaGBkZGhoYGhocIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJSs0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALwBDAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAECBQYAB//EADcQAAEDAgQEBAUDBAIDAQAAAAEAAhEDIQQSMUEFUWFxIoGR8DKhscHRBhPhQlJi8XKCFCOiFf/EABoBAAIDAQEAAAAAAAAAAAAAAAMEAAECBQb/xAArEQACAgEEAgEDBQADAQAAAAAAAQIRAwQSITFBURMiMpFCYXGhsRQjUgX/2gAMAwEAAhEDEQA/AOQrgXAb4eU/wl8LishyOnKfhNvROwlcVhZEjVKRknwx2UK5Q497SN/QLM4fVAe5pMeR+yLgcTPgd8Q+aUeMtYnqtxj2gcuWmjbD2/3DzkfZCxWJYxslwPIAyT5JHGY5rLNu75Duseo8uMkyVIwvlknJLhMNi8W55vYbDZAVVdjSbBGSSQBuyFBMLQoYRoEvk9BYJ2hAPgYB1hZc0jcccmZuBwpeSXseAPhlpDSepKeHDiTMgN5Agu/hNig4m5TLKEJaeoroaho5SXJnNwbBq1x8/wAJhnCWOv429oIWsKQI0V2Ai3uEvLVS8B46FdM55/AnAnI6SYMObl25rNr0XMOV7SD1XeF3hENHU3mFfE4YObMTFxspDXO6kkBnpHHo+dqCF2TMI148TW+gMrL4zwPIM9MWtLZ0ncTsmoamEpbemAlgklZgKCEzUwb2iS0xzBBHyQITCafQEjKhkXRVQ6rRTIhSpJUKFFSqgIiGFCM9ChSV4FQoGzUhWIVdHdwrlQsqQqkK68oUBc1UypgqkLVlUdkvBeUVaoYJcYASKOk37FsXhZ8bbOF/RY9fE5o57lXx2Pc+ws3lz7pMJmEWlyJzkm/pJK8oRaFIuPTmtt0YSbZFKmXGB/paVKk1tp9NVFOnAyiwT9PBmNEvkypDeHTtiv7UmwPmmqGFc2DIHLdNUcJF/wDZT1OiRBie6UyajikdHFpK5di+HYf6nfJP0GNUij07phmEOwSM8ikOwjt7QVuE3FwhvpiL7T5QmMM4tMEe+aHxwkUHuGuV30v56oEW3NI3JquTm3/qbIS1jJE6kxPktbg/GmVvC4ZX7CbEbx1XBPKvRrFpDgYI0Pbddieixyhwqfs4q1c9/wBXKPoDGQSPRL8Yf4GsGpPv6J/hWFrVGNe9oY4/3GJ6wLieqU4hg3tfLrjQEXHI9j3XPWOUJ210dHdinGk+WImmxrM79ANOZWbkD3T+22+0aLYfQLyBHhG3Xl/Kcw2BDbmABv8Ako61W1e2LS0SlKukZbP0+14u3J2Pzjksriv6efTGcHOwaxqO45LocVxFzjlw4sNXkfSfqhtwObxPcXneb/dahqckXuk0l68gcuki1UUcSQoLV2OJ/TlNwloc09jHmCuax2BfTdleLbEaFP4tRDJ0xDJglDtCRYFQsCLCghHBAi1RlV4XlZVA6xjKev1Xl6sPCel/ReChZ6FBUqCoZKFUVyoVkOqxWLawSddhuVgYnFOeZcew2CC95cZJknmvAIcYKISeRy/g8F5eXi5bBl2MJIAWi2nlEBDwVKBmOp06BHyE9AgzlfAzijSthsJi2MOZ4zR1hPf/ALFGfhePQjtqstuGnQT1Kap0GDUg9Bp6pfJjg+XY5inkj9pqUuN4bcub/wBSnqXHcMNKgnmQ78LBbSbs2fojsw7jo0DyCVlp8Xt/kdhmzVyl+DpcJxKg50Cqwk9QPrC2GUgbiD2XG0sANCAfL7pijgANCWn/ABJb82pWeHGupBlkn5R01bDCNIPPY/hJ1GiCxw8LgQeRBEFKU312iA/M3/Pxf/Q8Q+aM3Em2fw97tP8A2QtjXTsNF2uT5rjqJY97Dq0keh1V+HUyXtIAMOaSDpDSHGfILQ/WIaK9hBLWk7gm+nkEzwHDhtGs+ASxliYs53h+QNuscl3lkfxKXs89mhWWS9H0XEtLmF7GHM4ZgSYhrSDcz8gOQQKGGe5pDw0th2YtBidjJJgztqoq8fqNc1jA1oGWRE7EQ8za4GnRD47x972synLZjwzLNiQCHyLg6hJuW7ijCyKLtCHhYJdYD5ncrOq1HVjlEhnLSe/NZHEeLuzFhZJaYubd4QmcTrkEZg0HXKB9dUKGkkvq8nXjq4yjR1VLC02NGd7WgbEho85VX8YwzbB+YjZjS6/eIXIGoyZdmeeplNYfF0tP2njrEhW9Iu5W/wCCnqPCpfydNT48xw+GoOdm/K6DisVh6rS1zSB1afW2iQo1aLoE5f8Ak1w+tlsU+GtddpnqPygOOPG7pozKMpLwziuLcMdSOZpD6ZNnDY/2ujQ/VZZcvotfh0tcw3a4QQuR4rwN1IFzZLN51H5C6Wn1cJfS3z/pzc2nlHlLgxi/oozdF4hRCeFS4gggyPmg0fhCIAqURqOR+qhESQoKuVQhUiNA3BehTUULSMhFKiVR9SFRCznbASToAtbBcMyDPUu7ZuwO08yrYGlTpt/cLg5x3F/Jv5RG1HP8bv8AqNgOaFOT8B8cUnyeeoaTsJP0V20y42WjhsOGxa6VnkUR3HicmKMwRIlxK08NgRGg+/zRiGtu70Q38T2YPNKSy5J9HRhhhBXIOMLF49VcVabPidfksp1R7z8UBGpYTfXqeay8f/p/gKp39qHRxFv9IMdvyrt4iReJ8rfJKhoGpnoEVtMnQfJYcYLwXul7Du4kTownyAVmcQ5se3sA4eYVf/FgeJwHTU+iE+oxkak97+gVbYPpFXKrbMjj+Fa5zHt5OB12uLbalbmOwFJmEIYQC8B+UuyuyNIJqO5uJAhvoLLNr1s/hLOuvLmm+H06T3RWflnLnc4EnICPC21hEpuM2oqL8HF1ilvbiu/RHBGPqPc5xaX5Xk5tA4jICQN7HnqtriuFax7A4jKylSkzGjjmPpO6C7G4Wk2oWEGXMALPE7K2xyi0ak68lzvHMecQ/wAGYMEABxkmNM0ba2kqVul6FIQnLhIza3/seXmwsBqSQ2wcepCsKPQlHYXj+kEdk1RxGxYR2EojyNLhf2dXDhjFVYGlSA/oPqE7Qps3b5QfqmqTWO+GJTlPCkWI+iTyZ/fA5HBS4Asw7DEt9ERmHDbsJb2++xR//FgXHz+6s1hHUJR5W/JHjXotRxTm2eA4cwL+YTD6bHiRBB15doQ2tB0shlhYczJnfkfyhun1wynFpHH/AKo4L+0Q9jYYSZ6E6eSwWUiQSATHJfVapZVYWuFiCHA3196rh8XgzRdkiANDzHNdjRatyjsl2v7OZqNMoy3LpnPwhsEO7gLYq0GP1F+YsUhiMC4GW3584XRUkxOUGgJVCFLmd17L1WkYaKEIYRSDzVfRWVQSjSc85W+Z2HdMYvhzGgDMc31/CdqVW025WAT7ueZWc983WE23YSUYxVdv/C+HogkNGi2Qzb0SHDqdy7yC2sNhyJJMQgZ5pB9PickWw2HiPmrV8Y1pysGZ3yCWxOKLvCyzee5RcHSGwkmEk1+qX4OlB/pj+SW0S67zJ5fZM06G0Dr07oraYCWc8uJaLN3PND3N9dDKgl3yEc5oNr/RXYwu/CJQw82WpQY0DmgzyKPQaMG+xShhdzr2sjVHNpiTb5ImKxQYIsTyG3dYrgajpdcalZipT5l0b4iuOyamJc+SLDmdfIKlOiTfQfM+aaYy+ghMhlroryKPCQJwcnyxehQDdAJ7JfEMMPPSJ7rRZTJE+SBj2QzKsxnciTxccGDRp76g+wjspQNLSmKVGQABv9P9pylh5MHZMyyisMW1i9JggRrr3TLKU7e/sqUKWV2U+XZatECJSmSdB1jp2hNuHGo1TeHrlphwkc9kQ0hM3ITNPDB2iWlNPsN9qtFmuBvoFV7D0I5qGAt1FinGMt0OkIDdGX7FDQMW1VmkaOn8dUY03DX1Va1InXXY81N1maQrWY5plu0/z5LK/UVIPpCoNWkTzg2P2XQNuI3Hv0WVxWl4HgbtPqLhMaedTT/cDljcGcWCrBRChzg1pe7QfM7Ad16I44DiOXKLeI6dtz76rPp0i4w3VSa5ecx1O30AWrhcPkH+R1/C3e1cgvvfHRj1KZaYcI7qkLoX0w4Q6CEk/honUjpKimn2U8bXQiVVS9pBIOoVCURAzd4LTkNHMlN8Qfmfkb8LbdyEpwytkY1w1Fx3vdN4GnJ5n3KQycScn4OhivaoryWoYeLlaeHo27qG05HZGbVAF0hknKZ1MONRQHHOytgb281XD0LAf7VHAuOaLTYLQw7OazJ7Y0MQjbthqFLTYbquMxAY0xrt06lXe8MBWS5xe6TzQ4R3O2FboljMxl3spkti25+iljYElFY2StSl+ClHyQ1iacyyvTogCffJMUKBuSl5SvkvpCzGWCz8cZMALZrst2WU5gLpWscubJVoFRomBPZNUWAeiIxmlkUNUlNtmNiEq7Lgjn8im6TCNkY0+d917DWtZYlK1RdcF29Uzh2n1VAI2TNNki3f+EFmJPgh1IHXZewrw05fRGItB9+aVqMGo9kKIGuVRovpiCNd7fZIvsSL9E1w8h0tNjt37KK7NLLc4cbkDi9strEqjYAKHiKctvvKaq0zETaEoNIQ4sJVo4PGYbI9zORMdtQT5LneK4wPdlb8DdOp3cuo/W7nNcGtsXtueg/pXJYHBlzvELDXr0XqdK92NTl6ODqltm4RH+D4W2c7/CPutYFUbGgVnGyuT3OyoRUVRUukr0KqlQsBxDDZvEBca9QsdxhdVh8MX9uaT4jwqmXy2f8AIbE/ZSGVJ7WVkwtrcgOGdLWdgVs8PED3usv9uC0e9Vq0rCPdkvqHxQ/poW0x9jwAlKzszgEZ1UBt0GkLykYxq2dNR5oZpjYJ2iNzfkk2NvKaqPhttUKXLoPFJC2NqzZUpsgyq0m3k3TYb0Wm9qoiVuyWtK0MPhhuqYemFpYejuUCTbdElLagTKMojnRbkis+Sq6DEeQQn3QHdbFajbFIsoSSZstXEi0JakwLb+ngLGX02Q2mIVW3PX7JksXm0d/RYpk3KuSjGeyhFl5TbaN/NVfThyoypKw+GANjqn6WF22vsPmlcNzTdMwYJPSD7lEjDgUyt3wUfSykAz6fZCq0xHdPFoLeo92Sdi0xzWdq6MQm2Jh5Y4Ea6Jp1XMJ99kvXbN1Wi+8LKlS2jDinz5DVXSEm8X99oTT4hLVxEod8kRxP61YTUpgbtd9QsukwNEe5W7+pyM7OYafmf4WKF6PSy/6Io5GpivmbLNChy8SqOcjgCUVlGRKG0bkwBcnkAsnE44ucTlMCwg7DRaSb6MuSXZ1b8SLsZtqfwk61WLDX6dT+EL93WNSTfl/KqAhqKjwjak5K2CawgkySCQb6z7hbNEgkToYWWQtHDOlv19+SBnVqx3SSStF8QC1waeUjsdFekEpinnMJMnRP4cWS81UEzoYpNt2FnRDqVMxhXeYEquFp3lBVJWxhvwGYzRPYela5QHCITGHKBOVmkjQptTDHING6OWDZYq0Bm0XLLao+Dw0nMfhHz6AJZ02WnhmggAbfVbwQTlyL5W1EzeIASY5pemEbFg5i1SGAD0VSVyYaMqgkWZQk90T9sNMG6aw+EgSDGmn0Uml4uupn5Ivx8LgXllt1Yi8odSHEfPmn8VSyu9EpWZHv0S2SO2QSEk6aHKdIwNO/QIhYQ6wm06fdAbVJaLXmPVPl8jK3YEA9+qbgo9i03JPkVdXM6ADpB+v4SzHxKfZhnAGSIHI66LLrpfPxJVwbx7ZWkVrC97bpZxgpp9/klXnRLy7Go9DDX7oFV0gn3zUbJfH1xTY5x2GnU6D6KoRcpUiOlycjx2rmrEf2gN9Nfqs9We4lxcdSST53VSV6XHHbBR9HDyS3Tb9lSVCmVDqmRucxOjZ3PPsEUELcQqwMg7u+zfus+FJcSdyT9T3WpTpNaIMTv3RL2qgH38jAEWC8AphSAgNjR4IuGrQY5oD3otOkGjO6egWZK1yExycZWicQfGFp0XWWQ94dfduo76HstXCmWhK5o1FJnU081Jtrphah0CPTERCVY6XpuiUrLhUNx5dj7LjyU0jDggtdZealqC0bFAb+SYFglaGYI7nLKlxQtJcklxTTHkN1SzSD6KHPIEHmtxltMOO7g8TJkozW3QGpqkJU3cklwauGqeGOXL6INBoLjOn4SrahbY+qvh6ni+aa+RNITeOraGuItEwLyLSs7EtgJ/FOBgpCu+TGwS+am2zeG0kew7bSbxf+FoB+n1+azabhBE76qxdG6JGVRNShuYbF1gTYpKodyiEyhPJNoSuWVuwkIqPBV77Jetz5fdHqgARulax19fNC7YaJZpsud/U2Lktpj/kft+Vq47GtpszHXYcydlxtas57i51y4yV0NDguW99L/RTV5dsdq7YNUcVLioAXZOUyWsn6k9NysvHYjO63wizR059ynOI1srcg1N3dBqG/crMw1HM+Bvc9I1K3FfqAZXb2oewFKPGeze+58kzKk7AaCwUKm7ZuK2qhkKr3KXnkiktptzv+LYe/qhN0GSPMphgzP12ahVJJzZyDpANgOgISdTGFzpOpsOnQJui20u1V048vsvcpKl0WbTaHOdJM84TmEqWhKrwqRcIWSO9B8E/ja9GhQPiKbas2lUEyN1oUnaJHLFo62KakrHmP2V6Wo7obGK9E+JKMPuNai9GqXEhJUqknp81cv9Eu00we3kNTmVFUoTHQrtqytXwXtp2Gov2TdMi3okmOCJ+/GiwpcgpRvoZxDrnkh03iYS1SqNZVWOR1Mih9JquqgCB0QakRKA07aKTT5lVOdg1BRAtdJ+aLn80tU1spY5RS4DON8jTnbBCquuqOqRF0F776oTdlRjQR3f8AhI8QxTGC5/J6AK1fFNY0ucYA9T0C5HH4o1HlxsNhyH5TWm07ySt9A8+VY1+5GPxjqjszrDYckoSrKhXbhBRVI5E5OTtkSpNQMaXu2s0c3cuw1PZeYyT79SsziOIzuhnwtECd+bvNFjHc6ATltVgHvJJJMk3K0MLSyN6u1+wSmCpEukxA+uy0itTfgHjj+pnmhWheY1XhDbDJBqtVtFuZ13kWHvTusOtWc92Zxkn3AVX1XVHyTLj7tyC0sJhQ25u73otKKgrfYNyeR1HojB4WBJ1+icJXnmAhobe7kPFKKpFi5VCgKZUo1ZZroWjQqyAY6JTC0Mx5Aanl/KzuLcRzQymYY3cauI37ITx/I6QWOd4Vb/B1lGsdDumGGVyvBMfUIOcS0aO0M9t1u0cUOcFI5tO4SaOlh1MMiTX9mo10QjzskqdSeUn3I6pkPtqkZxobuyz3q9EpWo7mrUz1WXHg01wPgypch0XKznb/AGQ9oMG994CuxyBkJMiOysHHQhbZp+htp3C8+sffVLscoe9Vb6M7VZLn3lWa/ulSVb94NEn+Fqmaa4Cuck8ZjWsGZx7DdZWN41MimZGmbby591kveXGXGT1TmHRt8y4E8mpUeI8sLjcW6o6XabDYfkpdymFQldSEVFUjm5JOTtlSVLWqql9UNaXO0FgObtgiAnS5YLiNfI3IPidd3Ruw8/osljSTA1Kl7y4lxNzcp3A0Y8R30RktsRRv5JfsMU2BrQ0eyrNarAK7QhNjFEtCmV4qiosBw/BZG3ud/wABOEqCvBU3u5ZcYqKpESqKzlOyros8Ai4fCF5geZOwVGo3GnmnRAbaZk7rDbtL2a8N+hDi2PEftUz4R8R/uO47JHA4Uvd/iNT9ku3VdLh6YaAALI7XxwpC8F807Z6mwAQLDQKHu2RH6ILkuuWO14JZiXtPhP3WjS4sQPEPRZbVZDljhLtBIZZx6Z0eH4hTc2/na6syoJkaLluL1CymA22Y37cuyysNxCqwuDXuAERefqhf8FNWmFf/AND457Zo+kU6oRHVFyNPiNSPinuAm8LjXk3j0SctK15Go6mL8GwKpBRm1Fnh5V/3ChuF8DN2rNAug3CBXxI3KwcVj3847JTEVnCk94Pi58p1I6o+PS32xXJqlHwaGN/UVNktb43DlYA9SsCtjqmIdDneEatFgPyVnlauFYAyy6iwY8HS5OS9Vl1E6bpekEDQLKy8FLlQWirihFXKqVtA5FqbCSAPY5rG4zXzOAb8DbN683Hv9FrYh5FIkaugHsdViVtEXErdimolSorw+k57o/pGv4W41qBgmAMEb6poKTlbJjhUSWhXDVVqsUNhkQQmKdKyFTQuI497HBrYiAdOZKy7ZfB//9k=',
    'batata'=>'https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-potatoes-icon-png-image_3774277.jpg',
    'tomate'=>'https://cdn-icons-png.flaticon.com/512/1202/1202125.png?w=826&t=st=1683124110~exp=1683124710~hmac=ef1814fa242716a1f42fb1c02fe39dcaeff0cf806fb9cc226999dbf086c250b0');

foreach($vegetais as $chave=>$valor){
    echo 'Hoje vou cozinhar ' . $chave .
    "<img src=\"$valor\" /><br />";
}







?>

