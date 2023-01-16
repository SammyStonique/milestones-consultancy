from rest_framework import serializers
from .models import *

class PotentialClientSerializer(serializers.ModelSerializer):
    class Meta:
        model = PotentialClient
        fields=['id','name','email','phone_number','message','date']

class NewsletterSubscriberSerializer(serializers.ModelSerializer):
    class Meta:
        model = NewsletterSubscriber
        fields=['id','email']