



#print(u'\u0420\u043e\u0441\u0441\u0438\u044f')

user = api.get_user("HonorsUML")
'''
print("User details:")
print(user.name)
print(user.description)
print(user.location)
for follower in user.followers():
    print(follower.name)
    print(follower.description)
'''


'''
bio_list = []
for follower in user.followers():
    bio = follower.description.encode("utf-8")
    bio_list.append(bio)

with open('tweets.csv', mode='w') as tweets_file:
    tweet_writer = csv.writer(tweets_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
    for bio in bio_list:
        tweet_writer.writerow([bio])
 '''

''' Print ids of all friends
friends = api.friends_ids()
with open('friends.csv', mode='w') as friends_file:
    friends_writer = csv.writer(friends_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
    for id in friends:
        friends_writer.writerow([id])

#cursor = tweepy.Cursor(api.friends, id=name, count=200)


cursor = tweepy.Cursor(api.followers, screen_name="HonorsUML").items()
with open('friends.csv', mode='w') as friends_file:
    friends_writer = csv.writer(friends_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
for page in cursor.pages():
    for friend in page:
        friends_writer.writerow([friend])
'''

'''
with open('friends.csv', mode='w') as friends_file:
    friends_writer = csv.writer(friends_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
    for friend in limit_handled(tweepy.Cursor(api.friends, screen_name="HonorsUML").items()):
        friends_writer.writerow([friend.id])
        friends_writer.writerow([friend.name])

'''

#https://towardsdatascience.com/downloading-data-from-twitter-using-the-rest-api-24becf413875
'''
try:
    for tweet in tweepy.Cursor(api.user_timeline, screen_name="theresa_may", exclude_replies=True, count = 5).items():
        tweet_text = tweet.text
        time = tweet.created_at
        tweeter = tweet.user.screen_name
        tweet_dict = {"tweet_text" : tweet_text.strip(), "timestamp" : str(time), "user" :tweeter}
        tweet_json = json.dumps(tweet_dict)
        print(tweet_json)
except tweepy.TweepError:
    time.sleep(60)


for tweet in api.search(q="Rohingya", lang="my", rpp=5):
    print(f"{tweet.user.name}:{tweet.text}")
'''

'''
outtweets = []
for tweet in api.search(q="Kalar", lang="my", count=5, until="2019-10-2"):
    tweet = tweet.text.encode("utf-8")
    outtweets.append(tweet)

with open('tweets.csv', mode='w') as tweets_file:
    tweet_writer = csv.writer(tweets_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
    for tweet in outtweets:
        tweet_writer.writerow([tweet])
'''

'''
for tweet in tweepy.Cursor(api.user_timeline, screen_name="TheMyanmarTimes", exclude_replies=True, count = 5).items():
    tweet_text = tweet.text
    time = tweet.created_at
    tweeter = tweet.user.screen_name
    print(tweet_text)
'''
