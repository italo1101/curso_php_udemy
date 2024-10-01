<?php
    $link = "https://cdn-lfs-us-1.huggingface.co/repos/ac/b3/acb3de135033956271456e8ab1bbe284964f74bf9fab49fb27002b798f18f382/0450e96b0141236216854cda9303da17e2096d48cc144bb12dbff4111d6f5ab2?response-content-disposition=inline%3B+filename*%3DUTF-8%27%27image-classification-input.jpeg%3B+filename%3D%22image-classification-input.jpeg%22%3B&response-content-type=image%2Fjpeg&Expires=1727360168&Policy=eyJTdGF0ZW1lbnQiOlt7IkNvbmRpdGlvbiI6eyJEYXRlTGVzc1RoYW4iOnsiQVdTOkVwb2NoVGltZSI6MTcyNzM2MDE2OH19LCJSZXNvdXJjZSI6Imh0dHBzOi8vY2RuLWxmcy11cy0xLmh1Z2dpbmdmYWNlLmNvL3JlcG9zL2FjL2IzL2FjYjNkZTEzNTAzMzk1NjI3MTQ1NmU4YWIxYmJlMjg0OTY0Zjc0YmY5ZmFiNDlmYjI3MDAyYjc5OGYxOGYzODIvMDQ1MGU5NmIwMTQxMjM2MjE2ODU0Y2RhOTMwM2RhMTdlMjA5NmQ0OGNjMTQ0YmIxMmRiZmY0MTExZDZmNWFiMj9yZXNwb25zZS1jb250ZW50LWRpc3Bvc2l0aW9uPSomcmVzcG9uc2UtY29udGVudC10eXBlPSoifV19&Signature=BrTtGPELG4UaQX627oYbJtyO6ldN%7EyYcoEwpDduugw%7EmxWdRyzsCmhUke%7ExrmUcwH4xerMlDRnVP1rDIoElMXzqFh7oxognPLl5nlhcajqiWyKot0fm77wxNPhHDsTkpAz0EhUKYSwS9ExoMTMPvgGRkMxOA0%7EdaZCoQ9fKVZ8HScDqOqXp5aDPOPJER5RrLAaqc4cS5NNoAbk8SRVQs6nQq5zP707ZS4RZ4oTQ1CVNX5lB7DeOc9TGbi53h%7E3N57OzURi4Vfxxq6boKShRM11wB5TGFqfEAPOrNeCvFUL-W08fbahvbCjSEFy4SdC5sSwqSHTJZtKgZdp-NLN6OAA__&Key-Pair-Id=K24J24Z295AEI9";
    $content = file_get_contents($link);
    $parse = parse_url($link);
    $basename = (basename($parse["path"]));

    $file = fopen("gato", "w+");
    fwrite($file, $content);
    fclose($file);

?>

<img src="<?=$basename?>">