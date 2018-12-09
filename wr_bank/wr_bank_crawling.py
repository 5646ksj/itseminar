import re
import requests
s=requests.Session()
req=s.get('https://www.mibank.me/exchange/bank/index.php?search_code=020')
#req.encoding='euc-kr'
html=req.text
body=re.search('<table class="table_style01.*?</table>', html, re.I|re.S)
if(body is None) :
        print("No <body> in html")
        exit()
body=body.group()
f=open('wr_bank_output.php','w')
f.write(body)
f.close

