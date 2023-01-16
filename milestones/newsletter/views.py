import os
from django.shortcuts import render
from rest_framework import generics
from rest_framework.views import APIView
from rest_framework.decorators import api_view
from django.http import HttpResponse
from rest_framework.response import Response
from .models import *
from .serializers import *

#AFRICASTALKING
import africastalking
username = os.environ.get('AFRICASTALKING_USERNAME')
api_key = os.environ.get('AFRICASTALKING_API_KEY')
africastalking.initialize(username, api_key)  
sms = africastalking.SMS

##Send Email
import smtplib
from django.core.mail import send_mail 

# Create your views here.


@api_view(['POST'])
def newsletter(request):
    email = request.data.get('email')
    serializer = NewsletterSubscriberSerializer(data=request.data)

    if serializer.is_valid():
        serializer.save()
        recipient = [email]
        subject = 'Milestones Consultancy Newsletter'
        content = f'Thank you for subscribing to our newsletter'
        send_mail(subject, content,os.environ.get('EMAIL_HOST_MILESTONES'),recipient, fail_silently=False) 
        # sms.send(f'You have a message from a potential employer by the name of {name}',[f'{phone_number}'],callback=newsletter)
        return Response(serializer.data)

@api_view(['POST'])
def feedback(request):
    name = request.data.get('name')
    email = request.data.get('email')
    serializer = PotentialClientSerializer(data=request.data)
    
    if serializer.is_valid():
        serializer.save()
        recipient = [email]
        phone_number = '+254720920491'
        subject = 'Feedback or Inquiry concerning Milestones Consultancy'
        content = f'Dear {name}, we are pleased to hear from you. We will get back to you as soon as possible'
        send_mail(subject, content,os.environ.get('EMAIL_HOST_MILESTONES'),recipient, fail_silently=False) 
        sms.send(f'You have a message from a potential employer by the name of {name}',[f'{phone_number}'],callback=feedback)
        return Response(serializer.data)

class ClientList(generics.ListAPIView):
    queryset = PotentialClient.objects.all()
    serializer_class = PotentialClientSerializer

class ClientDetails(generics.RetrieveUpdateDestroyAPIView):
    queryset = PotentialClient.objects.all()
    serializer_class = PotentialClientSerializer

class NewsletterSubscription(generics.ListAPIView):
    queryset = PotentialClient.objects.all()
    serializer_class = PotentialClientSerializer
