import re
import requests
s=requests.Session()
f = open('bnk_output.php','w')
req=s.get('https://www.busanbank.co.kr/ib20/mnu/FPMFRX206001001#wrap')
#req.encoding='euc-kr'
html=req.text
body=re.search('<tr class="txt-r".*?</tbody>', html, re.I|re.S)
if(body is None) :
        print("No <body> in html")
        exit()
body=body.group()
#print(body)
f.write(body)
f.close

