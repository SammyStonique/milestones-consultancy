from django.urls import path
from . import views

urlpatterns = [
    path('newsletter-subscription/', views.newsletter, name='newsletter'),
    path('feedback/', views.feedback, name='feedback'),
    path('client-list/', views.ClientList.as_view()),
    path('newsletter-subscribers/', views.NewsletterSubscription.as_view()),
    path('client-details/<int:pk>/', views.ClientDetails.as_view()),
]