all: 	
	mysql -uuser-e -proot eshop

re:
	mysql -uuser-e -proot eshop < bdd.sql
