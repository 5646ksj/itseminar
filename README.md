Our project's subject is crawling of what is exchanging data of bank in Korea.
So we are crawling data of each bank.
We don't use open-source in crawling. So you don't need installing in linux.
If you want to see our result, pulling our github in your server dir(ex) in Apach = /var/www/html).
And then see 'indxt.php' file in your server Url.
<data>
-exchange information
-when one sells, when one buys information

<crawling>
-mybank banks' information
-kbbank information
-kebbank informaion
-bnk information
total 14banks' information

<Environment>
Ubuntu 18.04
Apache2
Python3
PHP

<Modules>
'$ sudo apt install python3`    	

`$ sudo apt install python3-pip`    	

`$ pip install urllib3`
'$ sudo apt install php'

<Target Site>
https://www.mibank.me/index.php
https://okbfex.kbstar.com/quics?page=C015690#loading
http://fx.kebhana.com/FER1101C.web?q=
https://www.busanbank.co.kr/ib20/mnu/FPMFRX206001001#wrapi 
