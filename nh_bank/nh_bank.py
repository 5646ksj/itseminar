import requests

html=requests.get('https://banking.nonghyup.com/servlet/IPEF0751I.view')
print(html.text)
