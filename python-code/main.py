import mechanize
import time
import requests

import mysql.connector
from mysql.connector import errors
import csv
from googletrans import Translator
from textblob import TextBlob
from sklearn.model_selection import train_test_split
from wordcloud import WordCloud,STOPWORDS
from string import punctuation
from nltk import word_tokenize
from nltk.corpus import stopwords
import re
stop = set(stopwords.words('english'))
import matplotlib.pyplot as plt
import pandas as pd
from nltk.corpus import stopwords
import mysql.connector
import sys
from PIL import Image
import base64
from io import StringIO
import PIL.Image
import os


output_file = 'out_file1.csv'


def uploadingimage(positive,negative,neutral):
    positivecount = positive
    negativecount = negative
    neutralcount = neutral
    print("uploading images")
    try:
        db = mysql.connector.connect(
          host="_____________.com",
          user="_____________",
          passwd="___________",
          database="__________"
        )

        image = Image.open('pridicted_graph.png')
        blob_value = open('pridicted_graph.png', 'rb').read()
        blob_value1 = open('positiveworldcount.png', 'rb').read()
        blob_value2 = open('negativeworldcount.png', 'rb').read()
        print(positivecount, negativecount, neutralcount)
        sql = 'INSERT INTO mi3cVqPqNO.outputs VALUES (%s,%s,%s,%s,%s,%s)'
        args = (blob_value,blob_value1,blob_value2,int(positivecount), int(negativecount), int(neutralcount))
        cursor=db.cursor()
        cursor.execute(sql,args)
        db.commit()
    except errors.DatabaseError as e:
        print(e)
    
    print("uploaded")
    db.close()
    os.remove('pridicted_graph.png')
    os.remove('positiveworldcount.png')
    os.remove('negativeworldcount.png')
    os.remove(output_file)
    os.remove('downloadedfromhost.csv')
    print("all process completed deleted all files")
    filechecking()



################################################################
def remove_stopwords(sentence):
    clean_sent = []
    for w in word_tokenize(sentence):
        if not w in stop:
            clean_sent.append(w)
    return " ".join(clean_sent)
################################################################

def remove_Tags(text):

    cleaned_text = re.sub('<[^<]+?>©','', text)
    return cleaned_text

###############################################################


def remove_punct(text):
    return ''.join(c for c in text if c not in punctuation)
##############################################################

def mainfunction():
    print('analysis function called')
    TEXTFILE = open(output_file, "w")
    TEXTFILE.truncate()
    with open(r"downloadedfromhost.csv")as f:
        data = csv.reader(f)

        for line in data:
            bla = None
            sentiment=None
            translator = Translator()

            translated_text = translator.translate(line[0])

            text_write = translated_text.text.lower()


            text_write = remove_stopwords(text_write)
            text_write = remove_Tags(text_write)
            obj = TextBlob(text_write)
            # returns the sentiment of text
            # by returning a value between -1.0 and 1.0
            sentiment = obj.sentiment.polarity
            if sentiment == 0:
                sentiment='neutral'
            elif sentiment > 0:
                sentiment = 'positive'
            else:
                sentiment = 'negative'
            print(text_write,sentiment)
            with open(output_file, 'a') as out_csv:
                writer = csv.writer(out_csv, delimiter=",")

                writer.writerow([text_write, sentiment])
    out_csv.close()

    ####################################################################


    stop_words = set(stopwords.words('english'))

    df = pd.read_csv(output_file, names = ["comments", "sentiment"])
    df.head()

    positive=(df['sentiment']=='positive').sum()
    negative=(df['sentiment']=='negative').sum()
    neutral=(df['sentiment']=='neutral').sum()
    print(positive,negative,neutral)
    positivecount=positive
    negativecount=negative
    neutralcount=neutral
    print(positivecount,negativecount,neutralcount)


    names = ['positive', 'negative', 'neutral']
    values = [positive, negative, neutral]

    graph=plt.bar(names, values, )
    plt.grid()
    graph[0].set_color('g')
    graph[1].set_color('r')
    graph[2].set_color('c')

    plt.ylabel('# of Occurrences', fontsize=9)
    plt.xlabel('category', fontsize=9)

    plt.suptitle('pridicted graph')
    plt.savefig('pridicted_graph.png')
    print("bargraph generated")



    data = pd.read_csv(output_file, names = ["comments", "sentiment"])
    train, test = train_test_split(data,test_size = 0.1)
    # Removing neutral sentiments
    train = train[train.sentiment != "neutral"]

    train_pos = train[train['sentiment'] == 'positive']
    train_pos = train_pos['comments']
    train_neg = train[train['sentiment'] == 'negative']
    train_neg = train_neg['comments']



    words = ' '.join(train_pos)
    cleaned_word = " ".join([word for word in words.split()
                             if 'http' not in word
                             and not word.startswith('@')
                             and not word.startswith('#')
                             and word != 'RT'
                             ])
    wordcloud = WordCloud(stopwords=STOPWORDS,
                          background_color='white',
                          width=2500,
                          height=2000
                          ).generate(cleaned_word)
    plt.figure(1, figsize=(13, 13))
    plt.imshow(wordcloud)
    plt.axis('off')

    plt.title('Wordcloud of key')
    plt.savefig('positiveworldcount.png')
    plt.close()
    print("Positive words image created")




    words = ' '.join(train_neg)
    cleaned_word = " ".join([word for word in words.split()
                             if 'http' not in word
                             and not word.startswith('@')
                             and not word.startswith('#')
                             and word != 'RT'
                             ])
    wordcloud = WordCloud(stopwords=STOPWORDS,
                          background_color='black',
                          width=2500,
                          height=2000
                          ).generate(cleaned_word)
    plt.figure(1, figsize=(13, 13))
    plt.imshow(wordcloud)
    plt.axis('off')

    plt.title('Wordcloud of key')
    plt.savefig('negativeworldcount.png')

    plt.close()
    print("negative words image created")

    uploadingimage(positive,negative,neutral)


############################################################


def filedownload():
    url = 'https://project17i.000webhostapp.com/imageupload/uploadedcsvfile.csv'
    response = requests.get(url)
    print('filedownloading and saving')
    with open('downloadedfromhost.csv', 'w') as f:
        writer = csv.writer(f)
        for line in response.iter_lines():
            writer.writerow(line.decode('utf-8').split(','))
    f.close()
    mainfunction()

#############################################



#checking any new request is there
def filechecking():
    br = mechanize.Browser()
    br.set_handle_redirect(False)
    try:
        br.open_novisit('https://project17i.000webhostapp.com/imageupload/uploadedcsvfile.csv')
        print('file is upladed')


        filedownload()
    except:
        time.sleep(10)
        print('no file is uploaded the sytem slept for 10 sec')
        br.close()
        filechecking()
filechecking()
