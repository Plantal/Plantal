using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;
using Newtonsoft.Json;
using System.Collections.ObjectModel;
using Plantal.CLIENTE;

namespace Plantal
{
    public class Item
    {
        public string user_id { get; set; }

        public string username { get; set; }
        public int admin { get; set; }
    }
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
           
            username.Text = "";
            senha.Text = "";

        }
        private async void login_Clicked(object sender, EventArgs e)
        {
            String user = username.Text.ToString()+"";
            String password = senha.Text.ToString()+"";
            if(!String.IsNullOrEmpty(user) && !String.IsNullOrEmpty(password) )
            {
                int flag = check_login(user, password);
               if (flag == 1)
                {
                    await Navigation.PushModalAsync(new MenuAdmin());
                }
                else if(flag == 0)
                {
                    await Navigation.PushModalAsync(new MenuCliente());
                   
                }
                else
                {
                    erro.Text = "Utilizador Inválido";
                }

               
            }

           
        }

        private  int check_login(String user, String pass)
        {
          
            var request = HttpWebRequest.Create(string.Format(API.BASE_URL+"login/{0}/{1}", user, pass));
            request.ContentType = "application/json";
            request.Method = "GET";

            using ( HttpWebResponse response =  request.GetResponse() as HttpWebResponse)
            {
                if (response.StatusCode != HttpStatusCode.OK)
                    Console.Out.WriteLine("Error fetching data. Server returned status code: {0}", response.StatusCode);
                using (StreamReader reader = new StreamReader(response.GetResponseStream()))
                {
                    var content = reader.ReadToEnd();
                    if (!string.IsNullOrWhiteSpace(content))
                    {
                        var tr = JsonConvert.DeserializeObject<List<Item>>(content);
                       
                        ObservableCollection<Item> user_ = new ObservableCollection<Item>(tr);
                        if(user_.Count >= 1 )
                        {
                            API.USER_ID = Convert.ToInt32(user_[0].user_id);
                            if(user_[0].admin == 1)
                            {
                                return 1;
                            }
                            else
                            {
                                return 0;
                            }
                            
                        }
                        else
                        {
                            return -1;
                        }
                        
                    }
                    else
                    {
                        return -1;
                    }

                   
                }
            }
        }
       
    }
}
