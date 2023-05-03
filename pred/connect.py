
# Algorithm for predicting period length

# get results from the query

#select * from (select cycle_length, period_start from cycle where user_id='125' order by period_start desc) where rownum <= 6;

#store the results in an array


# the lengths are computed in order from most recent to 6 moths prior
lengths = [27, 24, 29, 24, 27, 28]

# invert the lengths, so that the first one is weighted less
lengths.reverse()

denom = 0
prediction = 0

# Compute the weighted average
for weight, cycle_len in enumerate(lengths):
    #print(weight, cycle_len)
    temp = (weight+1) * cycle_len
   # print(temp)
    denom += weight +1
   # print(denom)
    prediction += temp
   # print(prediction)
   # print()

# divide the prediction by the total extra weight
prediction = int(prediction/denom)

#print("final prediction")
print(prediction)

