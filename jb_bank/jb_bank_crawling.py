import re
import requests
s=requests.Session()
req=s.get('https://www.mibank.me/exchange/bank/index.php?search_code=031')
#req.encoding='euc-kr'
html=req.text
body=re.search('<td class="last".*?</tbody>', html, re.I|re.S)
if(body is None) :
        print("No <body> in html")
        exit()
body=body.group()
text=re.sub('<.+?>','',body,0, re.I|re.S)
text=re.sub('&nbsp;| |(\n){2}|\t','',text)
f=open('jb_bank_output.php','w')
f.write(body)
f.close

