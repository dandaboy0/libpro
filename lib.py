import mysql.connector

try:
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        passwd=""
    )
    mycursor = mydb.cursor()
    sql1 = "CREATE DATABASE libpro"
    mycursor.execute(sql1)
    mydb.commit()
    mydb.database = "libpro"
    sql2 = "CREATE TABLE member (mid INT(10) NOT NULL PRIMARY KEY, cid INT(10) NOT NULL, mname VARCHAR(30), madd VARCHAR(20), mtel INT(10),mregdate DATE,mnic VARCHAR(12),msection VARCHAR(20),mbdate DATE,mcfirm INT(1))"
    mycursor.execute(sql2)
    mydb.commit()

    print("\n\t\t\t Database and table for 'Result Sheet Program' created successfully!")
    print("\n\t\t\t Now you can run Result Sheet program")
    x=1
    while True:
        if x==1:
            y=2
        else:
            y=3

except mysql.connector.Error as err:
    print(f"\n Error creating database or table: {err}")
    x=1
    while True:
        if x==1:
            y=2
        else:
            y=3

finally:
    if mydb:
        mycursor.close()
        mydb.close()
