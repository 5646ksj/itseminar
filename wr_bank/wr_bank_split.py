import re
import requests
s=requests.Session()
req=s.get('https://www.mibank.me/exchange/bank/index.php?search_code=020')
#req.encoding='euc-kr'
f=open('wr_bank_list.py','w')
html=req.text
body=re.compile('<td class="last".*?</tbody>',re.S)
bodyinform=body.findall(html)
inform=re.compile('<td class="first".*?</tr>',re.S)
bodys='\n'.join(bodyinform)
textlists=inform.findall(bodys)
gps=[[0 for cols in range(8)]for rows in range(42)]
for i in range(0,42):
	text=re.sub('<.+?>','',textlists[i],0,re.S)
	text=re.sub('|&nbsp;| |(\n){2}|\t','',text)
	body1=text.split()
	for j in range(0,8):
		gps[i][j]=''.join(body1[j])
f.write('\n'.join(map(str,gps)))
print(gps[0][1])
	#listfile save
#f=open('wr_bank_list.py','w')
#f.write(','.join(gps))
f.close

