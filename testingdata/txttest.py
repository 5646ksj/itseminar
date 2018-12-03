import re
f = open('output.txt','r')
data = f.read()
buf = str(data)
line = buf.splitlines()

#for l in line:{
    #print(l.split())
    #k=l.split()
 #   kk = re.split(l)}
#for l in line:
#    if line[l:l+1]== "USD<span style=\"font-size:11px;\">(미국 달러)</span>"
print(line[0:12])

f.close()

