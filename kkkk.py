import requests
from bs4 import BeautifulSoup
url =('https://www.stats.gov.cn/xxgk/sjfb/zxfb2020/202112/t20211229_1825727.html')
response = requests.get(url)
response.encoding = 'UTF-8'
if response.status_code==200:
    contest = response.text
    soup = BeautifulSoup(contest,'html.parser')
    paragraphs = soup.find_all('tr')[3:13]
    travel2021 = paragraphs
    if paragraphs:
        print("页面正文内容：")
        for paragraph in paragraphs:
            print(paragraph.text)
    else:
        print("未找到页面正文内容")
    print("---------------")
    for i in travel2021:
        print(i)
else:
    print('请求失败:',response.status_code)



