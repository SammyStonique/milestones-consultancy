from django.db import models

# Create your models here.
class NewsletterSubscriber(models.Model):
    id = models.AutoField(primary_key=True)
    email = models.EmailField(max_length=250)

    def __str__(self):
        return self.email

class PotentialClient(models.Model):
    id = models.AutoField(primary_key=True)
    name = models.CharField(max_length=250)
    email = models.EmailField(max_length=250)
    phone_number = models.CharField(max_length=250)
    message = models.TextField(blank=True, null=True)
    date = models.DateTimeField(auto_now_add = True)

    def __str__(self):
        return self.name