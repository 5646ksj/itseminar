import requests

html=requests.get('https://banking.nonghyup.com/so/jsp/cdoc/eform/html_service.jsp')
print(html.text)
