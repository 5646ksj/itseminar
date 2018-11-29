import requests
from bs4 import BeautifulSoup
URL="https://comic.naver.com/webtoon/list.nhn?titleId=20853"
html=get_html(URL)
webtoon_list=list()
soup=BeautifulSoup(html, 'html.parser')

webtoon_area=soup.find("tr",{"name":"INQ_DIS"}).find_all("td",{"class":"title"})
for webtoon_index in webtoon_area:
	info_soup=webtooon_index.find("a")
	_url
	
	

