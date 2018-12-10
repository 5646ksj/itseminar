import re
import requests
f = open('bnk_output.php','w')
s=requests.Session()
req=s.get('https://www.busanbank.co.kr/ib20/mnu/FPMFRX206001001#wrap')
html=req.text
body = re.search('<table cellspacing="0" class="tbl-type2" id="resultTable">.*?/table>',html,re.I|re.S)
f.write(body.group())
f.close
