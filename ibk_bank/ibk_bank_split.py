import re
import requests
s=requests.Session()
req=s.get('https://www.mibank.me/exchange/bank/index.php?search_code=003')
#req.encoding='euc-kr'
html=req.text
f=open('ibk_bank_list.py','w')
html=req.text
        #big frame
body=re.compile('<td class="last".*?</tbody>',re.S)
bodyinform=body.findall(html)
        #only inform frame, split by line
inform=re.compile('<td class="first".*?</tr>',re.S)
bodys='\n'.join(bodyinform)
textlists=inform.findall(bodys)
        #put the value in gps list
gps=[[0 for cols in range(8)]for rows in range(42)]
for i in range(0,42):
        text=re.sub('<.+?>','',textlists[i],0,re.S)
        text=re.sub('|&nbsp;| |(\n){2}|\t','',text)
        body1=text.split()
        for j in range(0,8):
                gps[i][j]=''.join(body1[j])
        #list file save
f.write('\n'.join(map(str,gps)))
f.close

