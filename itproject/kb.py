from bs4 import BeautifulSoup

bs=BeautifulSoup(urllib.request.urlopen('view-source:https://okbfex.kbstar.com/quics?page=C015690'.read(), 'html.parser')
elements=bs.find("a",{"onclick":"javascript:uf_goLink('USD')"})
print(elements.get_text())
