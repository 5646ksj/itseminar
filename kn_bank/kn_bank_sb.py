import re
f=open('kn_bank_list.py','r')
#print(f.readable(), f.writable())
html=f.read()
parse=re.sub("['|'|' '|\n]","",html)
parse1=parse.replace("]","").replace("[",",")
#parse2=parse.replace("","")
#parse=html.replace("(\n)","")
#parse=html.replace("[","")
#parse=html.replace("]","")
#text=html.findall("'.*'",html)
parse1=parse1.split(',')
#print(parse1)
list=[[0]*3 for i in range(3)]
for i in range(0,3):
        list[i][0]=parse1[8*i+1]
        list[i][1]=parse1[8*i+2]
        list[i][2]=parse1[8*i+4]
#print(list)
fo=open('kn_bank_sb.php','w')
fo.write('\n'.join(map(str,list)))
fo.close()

