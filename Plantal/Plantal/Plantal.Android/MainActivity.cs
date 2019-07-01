using System;

using Android.App;
using Android.Content.PM;
using Android.Runtime;
using Android.Views;
using Android.Widget;
using Android.OS;
using Plugin.Permissions;
using Android.Support.V4.Content;
using Android.Support.V4.App;
using ZXing.Mobile;

namespace Plantal.Droid
{
    [Activity(Label = "Plantal", Icon = "@mipmap/icon", Theme = "@style/MainTheme", MainLauncher = true, ConfigurationChanges = ConfigChanges.ScreenSize | ConfigChanges.Orientation)]
    public class MainActivity : global::Xamarin.Forms.Platform.Android.FormsAppCompatActivity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            TabLayoutResource = Resource.Layout.Tabbar;
            ToolbarResource = Resource.Layout.Toolbar;



            base.OnCreate(savedInstanceState);
            MobileBarcodeScanner.Initialize(this.Application);
            global::Xamarin.Forms.Forms.Init(this, savedInstanceState);


           

            Xamarin.FormsGoogleMaps.Init(this, savedInstanceState);
            LoadApplication(new App());

            int requestPermissions =1;
            string cameraPermission = Android.Manifest.Permission.Camera;
            string storagePermission = Android.Manifest.Permission.WriteExternalStorage;
            string storagePermission1 = Android.Manifest.Permission.ReadExternalStorage;
            if (!(ContextCompat.CheckSelfPermission(this, cameraPermission) == (int)Permission.Granted))
            {
                ActivityCompat.RequestPermissions(this, new string[] { cameraPermission, },  requestPermissions);
            }
            if (!(ContextCompat.CheckSelfPermission(this, storagePermission) == (int)Permission.Granted))
            {
                ActivityCompat.RequestPermissions(this, new string[] { storagePermission, }, requestPermissions);
            }
            if (!(ContextCompat.CheckSelfPermission(this, storagePermission1) == (int)Permission.Granted))
            {
                ActivityCompat.RequestPermissions(this, new string[] { storagePermission1, }, requestPermissions);
            }


        }
        public override void OnRequestPermissionsResult(int requestCode, string[] permissions, [GeneratedEnum] Android.Content.PM.Permission[] grantResults)
        {
            global::ZXing.Net.Mobile.Android.PermissionsHandler.OnRequestPermissionsResult(requestCode, permissions, grantResults);
            PermissionsImplementation.Current.OnRequestPermissionsResult(requestCode, permissions, grantResults);
            base.OnRequestPermissionsResult(requestCode, permissions, grantResults);
        }
    }
}