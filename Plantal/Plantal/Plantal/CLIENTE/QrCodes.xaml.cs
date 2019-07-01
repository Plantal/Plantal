using Plantal.Services;
using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Plantal.CLIENTE
{
	[XamlCompilation(XamlCompilationOptions.Compile)]
	public partial class QrCodes : ContentPage
	{
		public QrCodes ()
		{
			InitializeComponent ();
		}
        private async void btnScan_Clicked(object sender, EventArgs e)
        {
            try
            {
                var scanner = DependencyService.Get<IQrScanningService>();
                var result = await scanner.ScanAsync();
                if (result != null)
                {
                   
                    Uri myUri = new Uri(result);
                    Device.OpenUri(myUri);
                }
            }
            catch (Exception ex)
            {
                Button_Clicked(null, null);
            }
        }

        private async void Button_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushModalAsync(new MenuCliente());
        }
    }
}