def coupon():
	from random import randrange
	import time
	#format
	textcode="MQ-xxxx xxxx xx"

	irand = randrange(10000000,99999999)
	timee = str(int(time.time()))
	textcode ="MQ-"+timee

	print textcode
	return textcode
coupon()
