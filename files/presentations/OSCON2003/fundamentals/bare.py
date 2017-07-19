import wx

class App(wx.App):

    def OnInit(self):
        title = 'Bare Frame'
        frame = wx.Frame(parent=None, id=-1, title=title)
        frame.Show()
        return True

app = App()
app.MainLoop()
