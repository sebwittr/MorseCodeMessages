import os


class Config:
  #get environment variables
  host =  os.environ.get('host')
  username =  os.environ.get('username')
  password = os.environ.get('password')
  db_name = os.environ.get('db_name')

  SQLALCHEMY_DATABASE_URI = "mysql+pymysql://"+ str(username) + ":" + str(password) + "@" + str(host)+":"+"3306/"+ str(db_name)
  SQLALCHEMY_ECHO = False
  SQLALCHEMY_TRACK_MODIFICATIONS = False
  SQLALCHEMY_POOL_RECYCLE = 3600