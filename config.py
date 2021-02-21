import os


class Config:
  #get environment variables
  host = os.environ['host']
  username = os.environ['username']
  password = os.environ['password']
  db_name = os.environ['db_name']

  SQLALCHEMY_DATABASE_URI = "mysql+pymysql://"+ str(username) + str(password) + "@" + str(host)+":"+"3306/"+ str(db_name)
  SQLALCHEMY_ECHO = False
  SQLALCHEMY_TRACK_MODIFICATIONS = False