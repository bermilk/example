def coupon():
	from random import randrange
	import time
	#format
	textcode="MQ-xxxx xxxx xx"

	
	timee = str(int(time.time()))
	textcode ="MQ-%.7s"%timee
	for i in range(100,350):
		print textcode+str(i)
	return textcode
coupon()
