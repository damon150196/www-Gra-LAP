<?php

if(@$_SESSION['id_user'])
{
	echo'
		<article>
		<h1><strong><a href="http://jakubw.pl/sci/lap/">Gra Lap</a></strong></h1>
					<p><strong>Zasady gry:</strong><br />
					Dwóch graczy korzysta z plansz 10 na 10 pól, ponumerowanymi liczbami i literami oraz oznaczonych kolorami.<br />
					Pierwszy etap to podzielenie planszy na 4 rozłączne obszary o dowolnym kształcie, złożone z 25 pól(stykających się krawędziami).<br />
					Obszary te oznaczamy czterema kolorami. Celem gry jest odgadnięcie położenia i kształtu obszarów przeciwnika.<br />
					Rozgrywka polega na zadawaniu przeciwnikowi pytań dotyczących wybranych kwadratów 2 na 2 pola. <br />
					Odpowiedzią przeciwnika jest liczba pól należących do poszczególnych obszarów, jednak bez wyszczególnienia, o które pola chodzi.<br />
					Na przykład, na pytanie przeciwnika o kwadrat "A B 1 2" dajemy odpowiedź "2 niebieskie, 1 żółty, 1 różowy".<br />
					Gracze zadają pytania na zmianę, notując je w dowolny sposób i wyciągając na podstawie odpowiedzi wnioski na temat kształtu obszarów.<br />
					Gra kończy się w momencie, gdy jeden z graczy (zamiast swojego ruchu) zadeklaruje, że odtworzył obszary przeciwnika. <br />
					Jeśli gracz odgadł dokładnie położenie wszystkich pól - wygrywa, w przeciwnym wypadku opuszcza kolejkę. <br />
					Gra kończy się remisem, jeśli w tym samym ruchu (po tej samej liczbie uzyskanych odpowiedzi) obaj gracze zaprezentują prawidłowe rozwiązania.</p>
		<article>
		<button>Akceptuje</button>
		<button onclick="style.display=hidden">Chce uciec</button>
		';
}
else
	header("Location: index.php");
?>